module.exports = {
  corePlugins: {
    preflight: false, // Prevent Tailwind from overriding Argon styles
  },
  content: [
    './templates/**/*.html.twig',
    './assets/**/*.js',
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}
