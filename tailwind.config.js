module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      textColor:{
        'transparent': "transparent"
      },
    },
    colors:{
      parsRed:{
          DEFAULT: "#B82F4D",
      },
      parsYellow:{
          DEFAULT: "#FFC95B",
      },
      parsDarkOrange:{
        DEFAULT: "#E86A4D"
      },
      parsOrange:{
        DEFAULT: "#F59C57",
      },
      parsPurple:{
        DEFAULT: "#2C0540"
      },
      black:{
        DEFAULT: "#000000"
      },
      white:{ 
        DEFAULT: "#FFFFFFF"
      },
      gray:{
        "50": "#F9FAFB",
        "100": "#F3F4F6",
        "200": "#E5E7EB",
        "300": "#D1D5DB",
        "400": "#9CA3AF",
        "500": "#6B7280",
        "600": "#4B5563",
        "700": "#374151",
        "750": "#2B3544",
        "800": "#1F2937",
        "900": "#111827"
      }
    },
    fontFamily:{
      speed: ['A4 Speed']
    }
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
