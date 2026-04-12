import re
import sys

path = '/media/ehsan/TP-IT-Archive/Ehsan/techparkit/tpit(bdtask)/main/resources/views/pages/about.blade.php'
with open(path, 'r') as f:
    text = f.read()

start_marker = '<div class="row g-3" bis_skin_checked="1">'
start_idx = text.find(start_marker, text.find('Proven Expertise'))
if start_idx == -1:
    print("Start not found")
    sys.exit(1)

# The section ends with 4 closing divs:
#         </div>
#       </div>
#     </div>
#   ... (end of section)
end_idx = text.find('<!--', start_idx)  # Find the next comment if any, or end of file
if end_idx == -1: end_idx = text.find('@endsection', start_idx)

section_text = text[start_idx:end_idx]

# Extract the 6 unique SVGs
svgs = re.findall(r'<svg.*?</svg>', section_text, flags=re.DOTALL)
if len(svgs) < 6:
    print(f"Found only {len(svgs)} SVGs")
    sys.exit(1)

unique_svgs = svgs[:6]

labels = [
    'Cloud Architecture',
    'Data Analytics',
    'IoT Integrations',
    'Legacy Modernization',
    'AI & Machine Learning',
    'Global Delivery',
    'Strategic Consulting',
    'Agile Engineering',
    'Scalable Systems',
    'Security & Compliance',
    'DevOps & CI/CD',
    'Enterprise Support'
]

html_cols = []
delays = ['none', '0.2s', '0.4s', '0.6s', '0.8s', '1s'] * 2

for i in range(12):
    svg = unique_svgs[i % 6]
    label = labels[i]
    delay = delays[i]
    delay_attr = f'data-wow-delay="{delay}" ' if delay != 'none' else ''
    style_attr = f'style="visibility: hidden; animation-name: none; {"animation-delay: " + delay + ";" if delay != "none" else ""}"'
    
    col = f'''          <div class="col-xl-2 col-md-4 col-sm-6" bis_skin_checked="1">
            <div class="bg-white d-block p-4 shadow-sm text-center wow fadeInUp translateOnHover h-100" {delay_attr}bis_skin_checked="1" {style_attr}>
              <div class="mh_45" bis_skin_checked="1">
                {svg}
              </div>
              <div class="mt-4" bis_skin_checked="1">{label}</div>
            </div>
          </div>'''
    html_cols.append(col)

new_row = '        <div class="row g-3" bis_skin_checked="1">\n' + '\n'.join(html_cols) + '\n        </div>\n      </div>\n    </div>\n\n'

text = text[:start_idx] + new_row + text[end_idx:]

with open(path, 'w') as f:
    f.write(text)

print("Section rebuilt completely!")
