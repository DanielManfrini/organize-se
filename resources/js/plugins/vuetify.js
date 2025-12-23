import "vuetify/styles";
import { createVuetify } from "vuetify";
import { aliases, mdi } from "vuetify/iconsets/mdi";
import "@mdi/font/css/materialdesignicons.css";

export default createVuetify({
    icons: {
        defaultSet: "mdi",
        aliases,
        sets: {
            mdi,
        },
    },
    theme: {
        defaultTheme: "light",
        themes: {
            light: {
                colors: {
                    background: "#FFFFFF",
                    surface: "#F9FAFB",
                    primary: "#1E40AF",
                    secondary: "#6D28D9",
                    success: "#065F46",
                    warning: "#92400E",
                    error: "#7F1D1D",
                    textPrimary: "#111827",
                    textSecondary: "#374151",
                },
            },
            dark: {
                colors: {
                    background: "#0F172A",
                    surface: "#020617",
                    primary: "#60A5FA",
                    secondary: "#A78BFA",
                    success: "#34D399",
                    warning: "#FBBF24",
                    error: "#F87171",
                    textPrimary: "#F8FAFC",
                    textSecondary: "#CBD5E1",
                },
            },
        },
    },
});
