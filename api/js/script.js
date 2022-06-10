const app = new Vue({
  el: "#root",
  data: {
    songs: [],
  },
  created() {
    axios
      .get("http://localhost/php-ajax-dischi/api/server.php")
      .then((resp) => {
        this.songs = resp.data;
      })
  },
}) 
