import sys

path = '/media/ehsan/TP-IT-Archive/Ehsan/techparkit/tpit(bdtask)/main/resources/views/pages/about.blade.php'
with open(path, 'r') as f:
    text = f.read()

start_marker = '<div class="row g-3" bis_skin_checked="1">'
end_marker = '<div class="mt-4" bis_skin_checked="1">Enterprise Support</div>'

start_idx = text.find(start_marker, text.find('Proven Expertise'))
end_idx = text.find(end_marker, start_idx) + len(end_marker)
# Then find the 3 ending divs
end_idx = text.find('</div>', end_idx) + 6
end_idx = text.find('</div>', end_idx) + 6
end_idx = text.find('</div>', end_idx) + 6

if start_idx == -1 or end_idx == -1:
    print("Marks not found.")
    sys.exit(1)

content_to_duplicate = text[start_idx + len(start_marker):end_idx]

original_labels = [
    'Strategic Discovery',
    'Agile Engineering',
    'Scalable Systems',
    'Security & Compliance',
    'DevOps & CI/CD',
    'Enterprise Support'
]

new_labels = [
    'Cloud Architecture',
    'Data Analytics',
    'IoT Integrations',
    'Legacy Modernization',
    'AI & Machine Learning',
    'Global Delivery'
]

duplicated_content = content_to_duplicate
for i in range(6):
    duplicated_content = duplicated_content.replace(f'<div class="mt-4" bis_skin_checked="1">{original_labels[i]}</div>', f'<div class="mt-4" bis_skin_checked="1">{new_labels[i]}</div>')

# Now insert it
text = text[:end_idx] + "\n" + duplicated_content + text[end_idx:]

with open(path, 'w') as f:
    f.write(text)

print("Insertion successful.")
