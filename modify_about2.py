import re
import sys

path = '/media/ehsan/TP-IT-Archive/Ehsan/techparkit/tpit(bdtask)/main/resources/views/pages/about.blade.php'

with open(path, 'r') as f:
    text = f.read()

# Replace the text of the existing 6 cards
text = text.replace('FeedBack From Real User', 'Strategic Discovery')
text = text.replace('Research and Thinking', 'Agile Engineering')
text = text.replace('Release product', 'Scalable Systems')
text = text.replace('<div class="mt-4" bis_skin_checked="1">Development</div>', '<div class="mt-4" bis_skin_checked="1">DevOps & CI/CD</div>')
text = text.replace('Update and Support', 'Security & Compliance')
text = text.replace('Happy User', 'Enterprise Support')

columns = re.findall(r'<div class="col-xl-2 col-md-4 col-sm-6"[^>]*>.*?<div class="mt-4"[^>]*>.*?</div>\s*</div>\s*</div>', text, flags=re.DOTALL)

cols = columns[-6:]

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
    new_col = re.sub(r'<div class="mt-4"[^>]*>.*?</div>', f'<div class="mt-4" bis_skin_checked="1">{new_labels[i]}</div>', col)
    new_cols.append(new_col)

duplicated_html = '\n'.join(new_cols)

# We want to place this duplicating html after the Enterprise Support column
# We find the exact string of the enterprise support column
target = cols[-1] # The original 'Happy User' column
target_replaced = re.sub(r'<div class="mt-4"[^>]*>.*?</div>', f'<div class="mt-4" bis_skin_checked="1">Enterprise Support</div>', target)

if target_replaced in text:
    text = text.replace(target_replaced, target_replaced + '\n' + duplicated_html)
    with open(path, 'w') as f:
        f.write(text)
    print("Success replacing!")
else:
    print("Could not find the target text to place after.")

