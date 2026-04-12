import re
import sys

path = '/media/ehsan/TP-IT-Archive/Ehsan/techparkit/tpit(bdtask)/main/resources/views/pages/about.blade.php'

with open(path, 'r') as f:
    text = f.read()

# Replace the text of the existing 6 cards
text = text.replace('FeedBack From Real User', 'Strategic Discovery')
text = text.replace('Research and Thinking', 'Agile Engineering')
text = text.replace('Release product', 'Scalable Systems')
# Note: In the source, Development appears as "Development"
text = text.replace('<div class="mt-4" bis_skin_checked="1">Development</div>', '<div class="mt-4" bis_skin_checked="1">DevOps & CI/CD</div>')
text = text.replace('Update and Support', 'Security & Compliance')
text = text.replace('Happy User', 'Enterprise Support')

# Now find the blocks for the 6 cards. They are inside <div class="row g-3" bis_skin_checked="1">
# We will use a regex to match the <div class="col-xl-2 ...>...</div> blocks
row_start = '<div class="row g-3" bis_skin_checked="1">'
row_start_idx = text.find(row_start, text.find('Proven Expertise &amp; Trust'))
if row_start_idx == -1:
    print("Could not find the start of the row.")
    sys.exit(1)

# Find the end of this row by matching divs. 
# But we can also just extract the 6 columns using regex matching.
pattern = r'(<div class="col-xl-2 col-md-4 col-sm-6".*?</div>\s*</div>\s*</div>\s*</div>)'
# wait, the column ends with:
#               <div class="mt-4" bis_skin_checked="1">Happy User</div>
#             </div>
#           </div>
# There are 3 closing divs from the inner most or 2?
# <div class="col-xl-2..."><div class="bg-white..."><div class="mh_45"> ... </div> <div class="mt-4">...</div> </div></div>
# So 2 closing divs for the column:
columns = re.findall(r'<div class="col-xl-2 col-md-4 col-sm-6"[^>]*>.*?<div class="mt-4"[^>]*>.*?</div>\s*</div>\s*</div>', text, flags=re.DOTALL)

if len(columns) < 6:
    print(f"Found only {len(columns)} columns. Need 6 to duplicate.")
    sys.exit(1)

# we take the last 6 columns (because there are exactly 6 in this section)
cols = columns[-6:]

# Duplicate them with new text
new_labels = [
    'Cloud Architecture',
    'Data Analytics',
    'IoT Integrations',
    'Legacy Modernization',
    'AI & Machine Learning',
    'Global Delivery'
]

new_cols = []
for i, col in enumerate(cols):
    # replace the mt-4 text
    new_col = re.sub(r'<div class="mt-4"[^>]*>.*?</div>', f'<div class="mt-4" bis_skin_checked="1">{new_labels[i]}</div>', col)
    new_cols.append(new_col)

duplicated_html = '\n'.join(new_cols)

# insert before the closing div of the row
row_pattern = r'(<div class="mt-4"[^>]*>Enterprise Support</div>\s*</div>\s*</div>)(\s*</div>\s*</div>\s*</div>)'
match = re.search(row_pattern, text)
if match:
    text = text[:match.end(1)] + "\n" + duplicated_html + match.group(2) + text[match.end(2):]
    with open(path, 'w') as f:
        f.write(text)
    print("Success")
else:
    print("Could not find the insertion point.")

