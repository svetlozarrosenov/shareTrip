<template>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                        <label for="activity-title" class="col-form-label">Title:</label>
                        <input type="text" v-model="form.title" class="form-control" id="activity-title">
                        </div>
                        <div class="form-group">
                        <label for="activity-description" class="col-form-label">Notes:</label>
                        <textarea class="form-control" v-model="form.description" id="activity-description"></textarea>
                        </div>
                    </form>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" @click="addActivity" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data () {
                return {
                    form: {
                        title: '',
                        description: ''
                    }
            }
        },
        methods: {
            addActivity: function() {
            var formData = new FormData();
            formData.set('title', this.form.title);
            formData.set('description', this.form.description);

            let promise = axios({
                method: 'post',
                url: 'activity',
                data: formData
                
            })
            .then(function (response) {
                //handle success
                console.log(response);
            })
            .catch(function (response) {
                //handle error
                console.log(response);
            });

            return promise;
            }
        },
    }
</script>