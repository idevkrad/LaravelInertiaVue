<template>
<Head title="Students" />
    <PageHeader :title="title" :items="items" />
    <div class="chat-wrapper d-lg-flex gap-1 mx-n4 mt-n4 p-1">
            
            <div class="file-manager-content w-100 p-4 pb-0" style="height: calc(100vh - 180px)">
                
                <div class="p-3 bg-light rounded mb-4">
                    <b-row class="g-2">
                       
                        <b-col lg>
                            <div class="search-box">
                                <input type="text" id="searchTaskList" class="form-control search"
                                    placeholder="Search name">
                                <i class="ri-search-line search-icon"></i>
                            </div>
                        </b-col>
                        <b-col lg="auto">
                            <!-- <b-button variant="primary" class="createTask" type="button" data-bs-toggle="modal"
                                data-bs-target="#createTask" @click="create">
                                <i class="ri-add-fill align-bottom"></i> Add Tasks
                            </b-button> -->
                            <b-button variant="primary" class="createTask" @click="add"> <i
                                    class="ri-add-fill align-bottom"></i> New Student
                            </b-button>
                        </b-col>
                    </b-row>
                </div>

                <div class="todo-content position-relative px-4 mx-n4" id="todo-content">
                    <div id="elmLoader" v-if="lists.length == 0">
                        <div class="spinner-border text-primary avatar-sm" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                    <div class="todo-task" id="todo-task" v-else>
                        <div class="table-responsive">
                            <table class="table align-middle position-relative table-nowrap">
                                <thead class="table-active">
                                    <tr>
                                        <th></th>
                                        <th scope="col">Name</th>
                                        <th scope="col" class="text-center">Course</th>
                                        <th scope="col" class="text-center">Year</th>
                                        <th scope="col" class="text-center">Status</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>

                                <tbody id="task-lists">
                                    <tr v-for="(list, index) of lists" :key="index">
                                        <td>
                                            <div class="avatar-xs">
                                                <span :class="'avatar-title rounded-circle bg-'+list.g+' text-white'">{{list.lastname[0]}}</span>
                                            </div>
                                        </td>
                                        <td class="fw-bold">{{ list.name}}</td>
                                        <td class="text-center">{{ list.course.name}}</td>
                                        <td class="text-center">{{ list.year.name}} year</td>
                                        <td class="text-center"><span :class="'badge bg-'+list.status.color">{{list.status.name}}</span></td>
                                        <td class="text-end">
                                            <Link :href="'students/'+list.id">
                                            <b-button variant="soft-danger" size="sm" class="remove-list me-1"><i class="ri-eye-fill align-bottom"></i></b-button>
                                            </Link>
                                            <b-button variant="primary" size="sm" class="edit-list"><i class="ri-pencil-fill align-bottom"></i> </b-button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="py-4 mt-4 text-center" id="noresult" style="display: none;">
                        <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop"
                            colors="primary:#405189,secondary:#0ab39c" style="width:72px;height:72px"></lord-icon>
                        <h5 class="mt-4">Sorry! No Result Found</h5>
                    </div>
                </div>

            </div>
        </div>
       <New :colleges="colleges" :courses="courses" :dropdowns="dropdowns" ref="new"/>
</template>
<script>
import New from './Modals/New.vue';
import Multiselect from '@suadelabs/vue3-multiselect';
import PageHeader from "@/Shared/Components/PageHeader.vue";
import flatPickr from "vue-flatpickr-component";
export default {
    components : { PageHeader, Multiselect, flatPickr, New },
    props: ['dropdowns', 'colleges','courses'],
    page: {
        title: "List of Students",
        meta: [{ name: "description" }],
    },
    data() {
        return {
        title: "List of Students",
        items: [{text: "Lists",href: "/",},{text: "Student",active: true,},],
        lists : [],
        meta: {},
        links: {},
        };
    },
    created(){
        this.fetch();
    },
    methods : {
        add(){
            this.$refs.new.show();
        },

        fetch(page_url){
            page_url = page_url || '/students';
            axios.get(page_url,{
                params : {
                    keyword : this.keyword,
                    count: this.count,
                    search: true
                }
            })
            .then(response => {
                if(response){
                    this.lists = response.data.data;                    
                    this.meta = response.data.meta;
                    this.links = response.data.links;
                    this.page = this.meta.per_page*(this.meta.current_page - 1);
                }
            })
            .catch(err => console.log(err));
        },
    }
}
</script>
