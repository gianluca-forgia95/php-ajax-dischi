var root = new Vue({
    el: '#root',
     data: {
       albums: [],
    
    
        },
       mounted: function() {
         axios.get('http://localhost/php-ajax-dischi/api.php')
         .then( (resp) => {
            this.albums = resp.data;
          
          
         
    
    
         });
    
    
    
       },
    
    });