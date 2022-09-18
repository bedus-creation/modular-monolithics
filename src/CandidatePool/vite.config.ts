import { defineConfig } from 'vite'
import tailwindcss from 'tailwindcss'
import autoprefixer from 'autoprefixer'
import laravel from 'vite-plugin-laravel'
import vue from '@vitejs/plugin-vue'

export default defineConfig({
    plugins: [
        vue(),
        laravel({
            config: "candidate-pool",
            postcss: [
                tailwindcss(),
                autoprefixer(),
            ],
        }),
    ],
})
