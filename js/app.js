var root = new Vue({
    el: '#root',
     data: {
       albums: [],
        },
       mounted: function() {
         axios.get('http://localhost/php-ajax-dischi/api.php')
         .then( (resp) => {
            this.albums = resp.data;
         
         //Ordino gli Album per anno di uscita( dall'anno di uscita piu recente al piu vecchio )
         this.albums.sort( ( olderAlbum , youngerAlbum ) => {
           return youngerAlbum.year - olderAlbum.year;
         });
    
         });
    
    
    
       },
    
    });