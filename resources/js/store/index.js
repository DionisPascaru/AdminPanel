export default {
    state: {
        students: []
    },
    getters: {
        getStudents(state){
            return state.students;
        }
    },
    actions: {
        loadStudents(){
            axios.get("api/students")
                .then((response)=>{
                    console.log(response);
                })
                .catch((error)=>{
                    console.log("Error: ", error);
                })
        }
    },
    mutations: {

    }
}
