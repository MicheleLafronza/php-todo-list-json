const { createApp } = Vue;

createApp({
  data() {
    return {
      item: "",
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
    updateList() {
      const data = {
        item: this.item,
      };
      axios
        .post(this.apiURL, data, {
          headers: { "Content-Type": "multipart/form-data" },
        })
        .then((response) => {
          console.log("log di update", response.data);
          this.list = response.data;
          this.item = "";
        });
    },
    removeTask(index) {
      console.log("task numero", index);
      const data = {
        indexToRemove: index,
      };
      axios
        .post(this.apiURL, data, {
          headers: { "Content-Type": "multipart/form-data" },
        })
        .then((response) => {
          console.log("log di index", response.data);
          this.list = response.data;
        });
    },
  },
  mounted() {
    this.getApi();
  },
}).mount("#app");
