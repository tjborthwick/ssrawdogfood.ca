module.exports = {
    extends: [
      // add more generic rulesets here, such as:
      // 'eslint:recommended',
      'plugin:vue/vue3-recommended',
      // 'plugin:vue/recommended' // Use this if you are using Vue.js 2.x.
    ],
    rules: {
        // override/add rules settings here, such as:
        // 'vue/no-unused-vars': 'error'
        "vue/multi-word-component-names": ["error", {
            "ignores": ['Index', 'Edit', 'Create', 'View', 'Login', 'Register'],
        }],
        "vue/singleline-html-element-content-newline": ["error", {
            "ignores": ["pre", "Link"]
        }],
        "vue/no-v-html": false,
        // "vue/html-indent": ["error", 'number', {
        //     "attribute": 2,
        //     "baseIndent": 2,
        //     "closeBracket": 0,
        //     "alignAttributesVertically": true,
        //     "ignores": []
        // }],
    }
  }