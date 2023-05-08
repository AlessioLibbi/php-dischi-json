const { createApp } = Vue;

createApp({
    data() {
        return {
            dati: [],
            show: false,
            diskToShow: {

            }
        };
    },
    methods: {
        showMe(index) {
            this.show = true;
            axios.get("http://localhost/Boolean-Esercizzi/php-dischi-json/server.php", { params: { selectedOne: index } }).then((resp) => {
                this.diskToShow = resp.data.results;
                console.log(resp);
            });
        },

    },
    mounted() {
        axios.get("http://localhost/Boolean-Esercizzi/php-dischi-json/server.php").then((resp) => {
            this.dati = resp.data.results;
            console.log(resp);
        });
    },
}).mount("#app");