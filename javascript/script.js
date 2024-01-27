/**
 * Front-end JavaScript
 *
 * The JavaScript code you place here will be processed by esbuild. The output
 * file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */

import Alpine from 'alpinejs'
 
Alpine.data('notification', () => ({
    visible: false,
    message: "",

    send() {
        this.visible = true
    },

    dismiss() {
        this.visible = false
    }
}))

window.Alpine = Alpine
Alpine.start()