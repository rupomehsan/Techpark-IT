import re

path = '/media/ehsan/TP-IT-Archive/Ehsan/techparkit/tpit(bdtask)/main/resources/views/pages/about.blade.php'

with open(path, 'r') as f:
    text = f.read()

# Grab the 6 columns
cols = re.findall(r'<div class="col-xl-2 col-md-4 col-sm-6"[^>]*>.*?</div>\s*</div>\s*</div>', text, flags=re.DOTALL)
if len(cols) >= 6:
    cols_to_dup = cols[-6:]
    
    new_labels = [
        'Cloud Architecture',
        'Data Analytics',
        'IoT Integrations',
        'Legacy Modernization',
        'AI & Machine Learning',
        'Global Delivery'
    ]
    
    new_cols = []
    for i, col in enumerate(cols_to_dup):
        new_col = re.sub(r'<div class="mt-4"[^>]*>.*?</div>', f'<div class="mt-4" bis_skin_checked="1">{new_labels[i]}</div>', col)
        new_cols.append(new_col)
    
    duplicated_html = '\n'.join(new_cols)
    
    # insert right before the end of the row
    # find where Enterprise Support card ends
    idx = text.find('Enterprise Support')
    if idx != -1:
        # find the end of its column
        col_end = text.find('</div>', idx)
        col_end = text.find('</div>', col_end + 1)
        col_end = text.find('</div>', col_end + 1) + 6
        
        # insert here
        text = text[:col_end] + "\n" + duplicated_html + text[col_end:]
        with open(path, 'w') as f:
            f.write(text)
        print("Success inserting")
