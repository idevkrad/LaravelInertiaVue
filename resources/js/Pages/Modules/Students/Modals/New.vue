<template>
    <b-modal v-model="showModal" hide-footer body-class="p-0" size="lg" header-class="p-3" id="myModal"
        class="v-modal-custom" title="New Student" content-class="border-0 overflow-hidden" centered>
        <b-alert variant="success" class="rounded-0 mb-0" show>
            <p class="mb-0">Please fill up all and <span class="fw-semibold">correctly</span></p>
        </b-alert>
        <div class="modal-body">
            <form class="customform">
                <div class="row mt-4">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Firstname: <span v-if="form.errors" v-text="form.errors.firstname" class="haveerror"></span></label>
                            <input type="text" class="form-control" v-model="user.firstname" style="text-transform: capitalize;">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Middlename: <span v-if="form.errors" v-text="form.errors.middlename" class="haveerror"></span></label>
                            <input type="text" class="form-control" v-model="user.middlename" style="text-transform: capitalize;"> 
                        </div>
                    </div>
                        <div class="col-md-4">
                        <div class="form-group mb-3">
                            <label>Lastname: <span v-if="form.errors" v-text="form.errors.lastname" class="haveerror"></span></label>
                            <input type="text" class="form-control" v-model="user.lastname" style="text-transform: capitalize;">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Email: <span v-if="form.errors" v-text="form.errors.email" class="haveerror"></span></label>
                            <input type="email" class="form-control" v-model="user.email" style="text-transform: capitalize;">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group mb-3">
                            <label>Mobile No.: <span v-if="form.errors" v-text="form.errors.mobile" class="haveerror"></span></label>
                            <input type="text" class="form-control" v-model="user.mobile" style="text-transform: capitalize;">
                        </div>
                    </div>
                     <div class="col-md-4" style="margin-top: -1px; margin-bottom: -15px;">
                        <div class="row" style="margin-top: 20px;">
                            <div class="col-md-4">
                                <div class="custom-control custom-radio mb-3">
                                    <input type="radio" id="customRadio1" class="custom-control-input me-2"  value="M" v-model="user.gender">
                                    <label class="custom-control-label" for="customRadio1">Male</label>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="custom-control custom-radio mb-3">
                                    <input type="radio" id="customRadio2" class="custom-control-input me-2" value="F" v-model="user.gender">
                                    <label class="custom-control-label" for="customRadio2">Female</label>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </form>
        </div>

        <b-alert variant="info" class="rounded-0 mb-0" show>
            <p class="mb-0"><span class="fw-semibold">Course and Year</span></p>
        </b-alert>

        <div class="modal-body">
            <form class="customform">
                <div class="row mt-2 mb-4">

                    <div class="col-md-12">
                        <div class="form-group mb-3">
                            <label>College: <span v-if="form.errors" v-text="form.errors.college_id" class="haveerror"></span></label>
                            <Multiselect 
                            v-model="user.college" 
                            :options="colleges"
                            :allow-empty="true"
                            :show-labels="false"
                            label="name" track-by="id"
                            placeholder="Select Course"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Course: <span v-if="form.errors" v-text="form.errors.course_id" class="haveerror"></span></label>
                            <Multiselect 
                            v-model="user.course" 
                            :options="listCourse"
                            :allow-empty="false"
                            :show-labels="false"
                            label="name" track-by="id"
                            placeholder="Select Course"/>
                        </div>
                    </div>
                     <div class="col-md-6">
                        <div class="form-group">
                            <label>Year: <span v-if="form.errors" v-text="form.errors.year_id" class="haveerror"></span></label>
                            <Multiselect 
                            v-model="user.year" 
                            :options="years"
                            :allow-empty="false"
                            :show-labels="false"
                            label="name" track-by="id"
                            placeholder="Select Year"/>
                        </div>
                    </div>
                   
                </div>
                <div class="text-end">
                    <b-button type="button" @click="create()" variant="primary">Submit</b-button>
                </div>
            </form>
        </div>
        
    </b-modal>
</template>
<script>
import Multiselect from '@suadelabs/vue3-multiselect';
export default {
    components : { Multiselect },
    props: ['colleges','courses','dropdowns'],
    data(){
        return {
            form : {},
            currentUrl: window.location.origin,
            user: {
                id: '',
                email: '',
                firstname: '',
                lastname: '',
                middlename: '',
                gender: '',
                mobile: '',
                img: '',
                profile_id: '',
                college: '',
                course: '',
                year: ''
            },
            listCourse: [],
            showModal : false,
            editable: false,
        }
    },
    watch: {
        "user.college": function(newVal){
            if(!this.editable){
                if(newVal != undefined){
                    this.listCourse = this.courses.filter(x => x.college_id === newVal.id);
                }else{
                    this.user.college = '';
                }
            }
        },
    },
    computed: {
        years: function () {
            return this.dropdowns.filter(x => x.classification === 'Year');
        }
    },
    methods : {
        show(){
            this.showModal = true;
        },
        create() {
            this.form = this.$inertia.form({
                id: this.user.id,
                firstname: this.user.firstname,
                lastname: this.user.lastname,
                middlename: this.user.middlename,
                email: this.user.email,
                mobile: this.user.mobile,
                gender: this.user.gender,
                course_id: (this.user.course) ? this.user.course.id : '',
                year_id: (this.user.year) ? this.user.year.id : '',
                profile_id: this.user.profile_id,
                img: this.user.img,
                editable: this.editable
            })

            if(!this.editable){
                this.form.post('/students',{
                    preserveScroll: true,
                    onSuccess: (response) => {
                        this.hide();
                    }
                });
            }else{
                this.form.put('/students/update',{
                    preserveScroll: true,
                    onSuccess: (response) => {
                        this.hide();
                    }
                });
            }
        },
        hide(){
            this.showModal = false;
        }
    }
}
</script>
<style>
.multiselect__single {
    font-size: 11px;
}
</style>