@extends('layouts.guest')
	@section('content')
	
	<br><br><br><br><br>
	<div class="row">
        <div class="main">
            <!-- Find Book Form -->
            <article>
                <section>
                    <h2>Find A Book</h2>
                    <form id="find">
                        <label style="padding-left: 50px; font-size: 18px;" for="search">Book's Title</label>
                        <input type="text" id="key" name="key">
                        <input type="submit" value="Search" name="Search" class="btn-submit" onclick="searchBooks()">
                    </form>
                </section>         
            </article>

            <!-- Add Book Form -->
            <article>
                <section>
                    <div class="container bg-white shadow" id="add-book">
                        <h2 class="container-header text-center">Add Book</h2>
                        <form class="form" action="#" id="form">
                        <div class="form-group form-title">
                            <label for="title">Book's Title</label>
                            <input type="text" id="title" name="title" required>
                        </div>
                        <div class="form-group form-title">
                            <label for="author">Book's Author</label>
                            <input type="text" id="author" name="author" required>
                        </div>
                        <div class="form-group form-title">
                            <label for="year">Published Year</label>
                            <input type="year" id="year" name="year" required>
                        </div>
                        <div>
                            <label for="isComplete">I've already done read this</label>
                            <input type="checkbox" id="isComplete" name="isComplete">
                        </div>
                        <input type="submit" value="Submit" name="Submit" class="btn-submit">
                        </form>
                    </div>
                </section>          
            </article>
        </div><br>
        <div class="side">
            <aside>
                <!-- Incompleted List -->
                <article>
                    <section>    
                        <div class="container shadow">
                            <h2 class="container-header">Incomplete</h2>
                            <div class="list-item" id="books">
                            </div>
                        </div>                
                    </section>         
                </article>

                <!-- Completed List -->
                <article>
                    <section>
                        <div class="container shadow">
                            <h2 class="container-header">Completed</h2>
                            <div class="list-item" id="completed-books">
                            </div>
                        </div>
                    </section>          
                </article>
            </aside>
        </div>
    </div>


	@endsection