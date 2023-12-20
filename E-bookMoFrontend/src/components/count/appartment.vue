<template>
    <h1>TotalAppartment: {{ count }}</h1>
    </template>
    
    <script>
        import axios from 'axios'
        export default{
            data(){
                return{
                    count: null
                }
            },
            created(){
                this.getInfo()
            },
            methods:{
              async getInfo(){
            try {
                const ins = await axios.get('admin/appartment')
                this.count = ins.data;
                console.log('Total Rooms:', this.count);
            } catch (error) {
                console.log('Error to count:', error);
            }
              }
            }
            
        }
    </script>