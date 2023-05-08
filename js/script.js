const { createApp } = Vue;

createApp({
    data() {
        return {
            dati: [],
        };
    },
    mounted() {
        axios.get("http://localhost/Boolean-Esercizzi/php-dischi-json/server.php").then((resp) => {
            this.dati = resp.data.results;
            console.log(resp);
        });
    },
}).mount("#app");