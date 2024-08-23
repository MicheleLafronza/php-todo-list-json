const { createApp } = Vue;

createApp({
  data() {
    return {
      apiURL: "server.php",
      list: [],
    };
  },
  methods: {
    getApi() {
      axios.get(this.apiURL).then((response) => {
        console.log("log di api", response.data);
        console.log("log di lista", this.list);
        this.list = response.data;
      });
    },
  },
  mounted() {
    this.getApi();
  },
}).mount("#app");
