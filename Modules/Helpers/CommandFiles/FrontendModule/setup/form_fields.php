<?php

use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Form Field Generator
|--------------------------------------------------------------------------
|
| Generates form field configurations from field definitions
|
*/

if (!function_exists('FormField')) {
    function FormField($fields)
    {
        $content = "export default [\n";

        foreach ($fields as $fieldName) {
            // Skip fields with braces (relation fields)
            if (isset($fieldName[1]) && preg_match('/\{.*\}/', $fieldName[1])) {
                continue;
            }

            $content .= generateFieldConfig($fieldName);
        }

        $content .= "];\n";
        return $content;
    }
}

if (!function_exists('generateFieldConfig')) {
    /**
     * Generate configuration for a single field
     */
    function generateFieldConfig($fieldName)
    {
        $name = $fieldName[0];
        $type = $fieldName[1] ?? 'string';
        $label = Str::of($name)->snake()->replace('_', ' ');

        $config = "\t{\n";
        $config .= "\t\tname: \"$name\",\n";
        $config .= "\t\tlabel: \"Enter your $label\",\n";
        $config .= getFieldTypeConfig($type, $label);
        $config .= "\t\tvalue: \"\",\n";
        $config .= "\t},\n";

        return $config;
    }
}

if (!function_exists('getFieldTypeConfig')) {
    /**
     * Get field type configuration based on field type
     */
    function getFieldTypeConfig($type, $label)
    {
        $originalType = $type;

        // Normalize type handling
        if (strpos($type, 'string-') === 0) {
            $type = 'string';
        }

        // Handle custom enum types (tinyint-yes.no, boolean-active.inactive, enum-option1.option2)
        if (preg_match('/^(tinyint|boolean|enum)-(.+)$/', $originalType, $matches)) {
            return generateSelectField($matches[2], $label);
        }

        return getBasicFieldTypeConfig($type, $originalType);
    }
}

if (!function_exists('getBasicFieldTypeConfig')) {
    /**
     * Get basic field type configuration
     */
    function getBasicFieldTypeConfig($type, $originalType)
    {
        $config = '';

        switch ($type) {
            case 'longtext':
            case 'text':
                $config .= "\t\ttype: \"textarea\",\n";
                break;

            case 'date':
                $config .= "\t\ttype: \"date\",\n";
                break;

            case 'month':
                $config .= "\t\ttype: \"month\",\n";
                break;

            case 'datetime':
            case 'datetime-local':
            case 'timestamp':
                $config .= "\t\ttype: \"datetime-local\",\n";
                break;

            case 'time':
                $config .= "\t\ttype: \"time\",\n";
                break;

            case 'number':
            case 'unsigned_int':
            case 'unsignedInteger':
            case 'int':
            case 'integer':
            case 'intiger':
            case 'bigint':
            case 'biginteger':
                $config .= "\t\ttype: \"number\",\n";
                break;

            case 'year':
                $config .= "\t\ttype: \"number\",\n";
                $config .= "\t\tmin: \"1900\",\n";
                $config .= "\t\tmax: \"2100\",\n";
                break;

            case 'float':
            case 'double':
            case 'decimal':
                $config .= "\t\ttype: \"number\",\n";
                $config .= "\t\tstep: \"0.01\",\n";
                break;

            case 'binary':
                $config .= "\t\ttype: \"file\",\n";
                break;

            case 'uuid':
                $config .= "\t\ttype: \"text\",\n";
                $config .= "\t\treadonly: true,\n";
                break;

            case 'json':
                $config .= "\t\ttype: \"textarea\",\n";
                $config .= "\t\tplaceholder: \"Enter JSON data\",\n";
                break;

            case 'password':
                $config .= "\t\ttype: \"password\",\n";
                break;

            case 'stringfile':
            case 'file':
                $config .= "\t\ttype: \"file\",\n";
                $config .= "\t\tmultiple: \"false\",\n";
                break;

            case 'tinyint':
            case 'boolean':
                // Default boolean with Yes/No options
                $config .= generateSelectField('1.0', '', ['Yes', 'No']);
                break;

            case 'string':
            default:
                $config .= "\t\ttype: \"text\",\n";
                break;
        }

        return $config;
    }
}

if (!function_exists('generateSelectField')) {
    /**
     * Generate select field configuration with options
     */
    function generateSelectField($optionsString, $label, $customLabels = null)
    {
        $options = explode('.', $optionsString);
        $config = "\t\ttype: \"select\",\n";

        if ($label) {
            $config .= "\t\tlabel: \"Select $label\",\n";
        }

        $config .= "\t\tmultiple: false,\n";
        $config .= "\t\tdata_list: [\n";

        foreach ($options as $index => $option) {
            $optionLabel = $customLabels[$index] ?? ucfirst($option);
            $config .= "\t\t\t{\n";
            $config .= "\t\t\t\tlabel: \"$optionLabel\",\n";
            $config .= "\t\t\t\tvalue: \"$option\",\n";
            $config .= "\t\t\t},\n";
        }

        $config .= "\t\t],\n";
        return $config;
    }
}