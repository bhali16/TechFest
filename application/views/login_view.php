<?php $this -> load -> view("templates/header"); ?>



<?php echo form_open('login'); ?>
    <div class="bg-grey-lighter min-h-screen flex flex-col">
                <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
                    <div class="bg-white px-6 py-8 rounded shadow-md text-black w-full">
                        <h1 class="mb-8 text-3xl text-center">Sign up</h1>
                        <input 
                            type="text"
                            class="block border border-grey-light w-full p-3 rounded mb-4"
                            name="email"
                            placeholder="Email" />

                        <input 
                            type="text"
                            class="block border border-grey-light w-full p-3 rounded mb-4"
                            name="password"
                            type="password" 
                            placeholder="Password" />

                        
                        

                        <input
                            type="submit"
                            class="w-full text-center py-3 rounded bg-green-400 text-white hover:bg-green-dark focus:outline-none my-1"
                            name="login_user"
                            value="Login"

                        >

                        

                    <div class="text-grey-dark mt-6">
                        Don't an account? 
                        <a class="no-underline border-b border-blue text-blue" 
                        href="<?php echo base_url(). "/register" ?>">
                            Signup
                        </a>.
                    </div>
                </div>
    </div>

</form>