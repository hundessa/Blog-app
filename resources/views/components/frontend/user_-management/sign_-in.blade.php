<x-app-layout />
<div class="signUp-bg min-h-screen flex">
    <div class="flex items-center justify-center mx-auto">
        <div class="signUp-form flex justify-center mx-auto rounded-xl py-12">
            <div>
                <div class="text-center mb-12">
                    <h1 class="text-white text-5xl font-semibold">Sign In</h1>
                    <div class="underline bg-white mt-5 w-52 rounded-md flex justify-center mx-auto"></div>
                </div>
                <div>
                    <form action="" class="">
                        <label for="" class="text-white text-lg font-semibold">Email</label><br>
                        <input type="email" placeholder="Email" class="signup-input mt-2 h-12 w-80 font-semibold rounded-xl text-white pl-3 outline-none mb-6"><br>
                        <label for="" class="text-white text-lg font-semibold">Password</label><br>
                        <input type="password" placeholder="Password" class="signup-input mt-2 h-12 w-80 font-semibold rounded-xl text-white pl-3 outline-none mb-6"><br>
                        <div class="flex justify-end ml-auto mt-2">
                            <a href="" class="hover:underline text-white mb-6">Forgot Password?</a>
                        </div>
                        <button class="signup-btn text-white text-lg px-12 py-1 rounded-md flex justify-center mx-auto">Log In</button>
                    </form> 
                </div>
                <div class="flex justify-center mx-auto text-white space-x-4 mt-8">
                    <h1>Don't have an account?</h1>
                    <a href="{{ url('/sign-up') }}" class="underline">Register</a>
                </div>
            </div>
        </div>
    </div>
</div>