// CreateUser.vue

<template>
  <div>
    <div class="container-fluid">
      <div class="row align-items-center justify-content-center">
        <div class="col-md-6">
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Thông tin User</h3>
            </div>
            <form @submit.prevent="addUser">
              <div class="card-body">
                <div class="row">
                  <div class="form-group col-md-12">
                    <label>User name</label>
                    <span class="text-red">*</span>
                    <input type="text" data-type="currency" v-model="user.name" class="form-control" placeholder="User name"  autocomplete="off">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-12">
                    <label>Email</label>
                    <span class="text-red">*</span>
                    <input type="email"  v-model="user.email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-12">
                    <label>PassWord</label>
                    <span class="text-red">*</span>
                  <input type="password" v-model="user.password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-12">
                      <label></label>
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
    export default {
        data(){
        return {
          user:{}
        }
    },
    methods: {
      addUser(){
        let uri = 'http://127.0.0.1:8000/api/user';
        axios.post(uri, this.user).then((response) => {
          this.$router.push({name: 'users'});
        });
      }
    }
  }
  
</script>