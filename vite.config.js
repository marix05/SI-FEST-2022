import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    base: "/build/", // 👈 penting untuk routing asset di Vercel
    build: {
        outDir: "public/build", // 👈 output ke folder public
        emptyOutDir: true,
        manifest: true,
        rollupOptions: {
            input: ["resources/css/app.css", "resources/js/app.js"],
        },
    },
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
    ],
});
