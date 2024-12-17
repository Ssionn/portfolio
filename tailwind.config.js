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
                    default: '#f9f7f6',
                    lighter: '#e4cfca',
                    light: '#595ccb',
                    superdark: '#0b0b4d',
                },
            },
        },
    },
    plugins: [
        require('flowbite/plugin')
    ],
}
