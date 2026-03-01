#!/bin/bash

# Blade Template Optimization Script
# This script updates welcome.blade.php to use dynamic data from the controller

BLADE_FILE="resources/views/welcome.blade.php"
BACKUP_FILE="resources/views/welcome.blade.php.original"

echo "========================================="
echo "Blade Template Optimization Script"
echo "========================================="
echo ""

# Check if blade file exists
if [ ! -f "$BLADE_FILE" ]; then
    echo "Error: $BLADE_FILE not found!"
    exit 1
fi

# Create backup if it doesn't exist
if [ ! -f "$BACKUP_FILE" ]; then
    echo "Creating backup..."
    cp "$BLADE_FILE" "$BACKUP_FILE"
    echo "✓ Backup created: $BACKUP_FILE"
else
    echo "✓ Backup already exists: $BACKUP_FILE"
fi

echo ""
echo "Applying optimizations..."
echo ""

# 1. Update About Section Description
echo "1. Updating About section description..."
perl -i -pe 's/Transform your business with our innovative IT solutions,\s*tailored to address your unique challenges and drive growth in today'"'"'s digital\s*landscape./{{ \$aboutData[\x27description\x27] }}/g' "$BLADE_FILE"


# 2. Update About Section Tagline
echo "2. Updating About section tagline..."
perl -i -pe 's/(<span class="section-title__tagline">)About Us(<\/span>)/\1{{ \$aboutData[\x27tagline\x27] }}\2/g' "$BLADE_FILE"

# 3. Update Contact Email
echo "3. Updating contact email..."
perl -i -pe 's/info@domain\.com/{{ \$contactData[\x27email\x27] }}/g' "$BLADE_FILE"

# 4. Update Contact Phone
echo "4. Updating contact phone..."
perl -i -pe 's/99 \(00\) 567 780/{{ \$contactData[\x27phone\x27] }}/g' "$BLADE_FILE"
perl -i -pe 's/tel:9900567780/tel:{{ \$contactData[\x27phone_raw\x27] }}/g' "$BLADE_FILE"

# 5. Update Contact Address
echo "5. Updating contact address..."
perl -i -pe 's/1629 N\. Dixie Avenue, Kentucky, 42701/{{ \$contactData[\x27address\x27] }}/g' "$BLADE_FILE"

# 6. Update satisfied clients count in About section
echo "6. Updating satisfied clients count..."
perl -i -pe 's/data-count="120"/data-count="{{ \$aboutData[\x27satisfied_clients\x27] }}"/g' "$BLADE_FILE"

# 7. Update About images
echo "7. Updating About section images..."
perl -i -pe 's|frontend/assets/images/about-two-img-1\.jpg|\$aboutData[\x27image\x27]|g' "$BLADE_FILE"
perl -i -pe 's|frontend/assets/images/about-two-img-2\.jpg|\$aboutData[\x27image_2\x27]|g' "$BLADE_FILE"

echo ""
echo "========================================="
echo "Basic optimizations complete!"
echo "========================================="
echo ""
echo "Note: Some complex sections (Counter, Services, Process, Events)"
echo "require manual updates due to their structure."
echo ""
echo "Please refer to BLADE_OPTIMIZATION_GUIDE.md for:"
echo "- Counter section loop"
echo "- Services section loop"
echo "- Process section loop"
echo "- Events section loop"
echo "- Blog section updates"
echo ""
echo "To restore original file:"
echo "cp $BACKUP_FILE $BLADE_FILE"
echo ""
echo "Next steps:"
echo "1. php artisan cache:clear"
echo "2. php artisan view:clear"
echo "3. Test the homepage"
echo ""
