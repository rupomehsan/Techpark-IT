export default [
  {
    name: "word",
    label: "Enter your word",
    type: "text",
    value: "",
    row_col_class: "col-md-4",
  },
  // {
  //   name: "language",
  //   label: "Enter your language",
  //   type: "select",
  //   label: "Select language",
  //   multiple: false,
  //   data_list: [
  //     {
  //       label: "English",
  //       value: "english",
  //     },
  //     {
  //       label: "Bangla",
  //       value: "bangla",
  //     },
  //   ],
  //   value: "english",
  //   row_col_class: "col-md-4",
  // },
  {
    name: "meaning",
    label: "Enter your meaning",
    type: "text",
    value: "",
    row_col_class: "col-md-4",
  },

  {
    name: "pronunciation",
    label: "Enter your pronunciation",
    type: "text",
    value: "",
    row_col_class: "col-md-4",
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
    value: "medium",
    row_col_class: "col-md-4",
  },

  {
    name: "part_of_speech",
    label: "Enter your part of speech",
    type: "text",
    value: "",
    data_list: [
      { label: "Noun", value: "noun" },
      { label: "Pronoun", value: "pronoun" },
      { label: "Adjective", value: "adjective" },
      { label: "Verb", value: "verb" },
      { label: "Adverb", value: "adverb" },
      { label: "Preposition", value: "preposition" },
      { label: "Conjunction", value: "conjunction" },
      { label: "Interjection", value: "interjection" },
      { label: "Determiner", value: "determiner" },
      { label: "Article", value: "article" },
    ],
    row_col_class: "col-md-4",
  },
];
