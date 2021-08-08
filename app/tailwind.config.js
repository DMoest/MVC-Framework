module.exports = {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {},
        fontFamily: {
            title: ['Acme'],
            header: ['Lato'],
            body: ['Roboto'],
            link: ['Lato'],
        },
    },
    variants: {
        extend: {
            backgroundColor: ['odd'],
            backgroundColor: ['even']
        },
    },
    plugins: [
        require('@tailwindcss/custom-forms'),
    ],
}
