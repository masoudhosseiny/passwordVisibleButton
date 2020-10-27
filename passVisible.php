<?php
<label for="password">Password</label>
<input type="password" name="password" class="inputTag" id="password" v-model="registerForm.password" :class="{'is-invalid': registerForm.errors.has('password')}">


<i class="far fa-eye" id="togglePassword2" @click="togglePasswordVisiblty()">SHOW PASS</i>
<script>

function togglePasswordVisiblty() {
var togglePass = document.getElementById("password");
(togglePass.type === 'password') ? togglePass.type ='text' : togglePass.type ='password';
}

</script>
