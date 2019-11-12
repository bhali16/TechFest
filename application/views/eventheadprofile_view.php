<?php 
	$this -> load -> view("templates/header");
 ?>

 <div class="mt-4">

 	<div class="event_headInfo border border-gray-300 shadow mb-4">
 		<p class="font-bold p-2 ">My Profile</p>
 		<div class="p-2">
			<span class="text-gray-700">Name: </span> 		
			<span class="text-bold text-gray-800">Ehtisham</span>
 		</div>

 		<div class="p-2">
			<span class="text-gray-700">Email: </span> 		
			<span class="text-bold text-gray-800">ehtishamhasan9@gmail.com</span>
 		</div>

 		<div class="p-2">
			<span class="text-gray-700">username: </span> 		
			<span class="text-bold text-gray-800">ehtishama</span>
 		</div>

 	</div>

 	<!-- organized events -->
 	<div>
 		<p class="font-bold mb-4">My Events</p>


 		<!-- list of events -->
 		<div>
 			<div class="flex p-1 border border-gray-500 mb-4">
 				<p class="w-full">
 					<a href="#"  class="font-bold">Event Name</a>
 					<p class="self-right" class="font-bold">Participants</p>
 				</p>
 			</div>

 			<div class="flex p-1 border border-gray-400">
 				<p class="w-full">
 					<a href="#"  class="font text-blue-600">Speed Programming</a>
 					<p class="self-right" class="font-bold">200</p>
 				</p>
 			</div>

 		</div>
 	</div>
 </div>