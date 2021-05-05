var root = new Vue({
    el: '#root',
     data: {
       albums: [],
    //    genres: [],
    //    selected: "",
    
    
        },
       mounted: function() {
         axios.get('')
         .then( (resp) => {
            this.albums =  resp.data.response;
          
          
         
    
    
         });
    
    
    
       },
    
    });