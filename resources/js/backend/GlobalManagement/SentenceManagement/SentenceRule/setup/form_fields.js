export default [
	{
		name: "sentence",
		label: "Enter your sentence",
		type: "textarea",
		value: "",
	},

	{
		name: "language",
		label: "Enter your language",
		type: "select",
		label: "Select language",
		multiple: false,
		data_list: [
			{
				label: "English",
				value: "english",
			},
			{
				label: "Bangla",
				value: "bangla",
			},
		],
		value: "",
	},

	{
		name: "label",
		label: "Enter your label",
		type: "select",
		label: "Select label",
		multiple: false,
		data_list: [
			{
				label: "Basic",
				value: "basic",
			},
			{
				label: "Medium",
				value: "medium",
			},
			{
				label: "Advance",
				value: "advance",
			},
			{
				label: "Professional",
				value: "professional",
			},
		],
		value: "",
	},

	{
		name: "meaning",
		label: "Enter your meaning",
		type: "textarea",
		value: "",
	},

	{
		name: "example",
		label: "Enter your example",
		type: "textarea",
		placeholder: "Enter JSON data",
		value: "",
	},
];
