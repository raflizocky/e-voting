import path from "path";

// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
  compatibilityDate: "2024-11-01",
  devtools: { enabled: true },
  css: [path.resolve(__dirname, "src/assets/css/main.css")],
  srcDir: "src/app/",
  modules: ["@nuxtjs/tailwindcss"],
  app: {
    head: {
      title: "CampusVote - Secure E-Voting for University Elections",
      meta: [
        {
          name: "description",
          content:
            "Modern and secure e-voting platform for university student body elections",
        },
        { name: "viewport", content: "width=device-width, initial-scale=1" },
        { name: "theme-color", content: "#1d4ed8" },
        { property: "og:type", content: "website" },
        { property: "og:site_name", content: "CampusVote" },
        {
          property: "og:title",
          content: "CampusVote - Secure E-Voting for University Elections",
        },
        {
          property: "og:description",
          content:
            "Modern and secure e-voting platform for university student body elections",
        },
        {
          property: "og:url",
          content: "https://evoting-raflizocky.netlify.app/",
        },
        { name: "twitter:card", content: "summary_large_image" },
      ],
      link: [
        { rel: "icon", type: "image/x-icon", href: "/favicon.ico" },
        { rel: "preconnect", href: "https://fonts.googleapis.com" },
        {
          rel: "preconnect",
          href: "https://fonts.gstatic.com",
          crossorigin: "",
        },
        {
          rel: "stylesheet",
          href: "https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap",
        },
      ],
      script: [
        {
          src: "https://cdn.jsdelivr.net/npm/webfontloader@1.6.28/webfontloader.js",
          async: true,
          onload: "WebFont.load({ google: { families: ['Inter'] } })",
        },
      ],
    },
    pageTransition: {
      name: "page",
      mode: "out-in",
    },
  },
  runtimeConfig: {
    public: {
      loginUrl: process.env.NUXT_PUBLIC_LOGIN_URL || "http://127.0.0.1:8000/",
    },
  },
});
