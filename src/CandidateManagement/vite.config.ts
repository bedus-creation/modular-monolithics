import vue from "@vitejs/plugin-vue"
import autoprefixer from "autoprefixer"
import tailwindcss from "tailwindcss"
import { defineConfig } from "vite"
import laravel from "vite-plugin-laravel"

export default defineConfig({
    plugins: [
        vue(),
        laravel({
            config: "candidate-management",
            postcss: [
                tailwindcss(),
                autoprefixer(),
            ],
        }),
    ],
})
