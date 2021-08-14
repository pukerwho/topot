module.exports = {
  purge: {
    enabled: true,
    layers: ["components", "utilities"],
    content: ["./source/css/tailwind.css", "./**/*.php"],
  },
  theme: {
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
