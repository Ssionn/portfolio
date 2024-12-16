module.exports = {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      "./node_modules/flowbite/**/*.js"
    ],
    theme: {
        extend: {
            colors: {
                primary: {
                    default: '#CED4DA',
                    lighter: '#DEE2E6',
                    light: '#E9ECEF',
                    superdark: '#343A40',
                },
            },
        },
    },
    plugins: [
        require('flowbite/plugin')
    ],
}
