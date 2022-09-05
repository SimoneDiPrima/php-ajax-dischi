Vue.config.devtools = true;

const app = new Vue({
    el:'#root',
    data:{
        discs:[]
    },
    created(){
        axios.get('http://localhost:8080/api/index.php').then(res =>{
            this.discs = res.data;
        })
    }


})