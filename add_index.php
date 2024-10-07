<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <!-- Header with Logo and Title -->
    <header>
        <img src="logo.jpg" alt="PnC Library Logo">
        <h1>University of Cabuyao</h1>
    </header>

    <div class="container">
        <h2>PnC eLibrary</h2>

        <!-- Add or Edit Book Form -->
        <div class="form-section">
            <h3 id="formTitle">Add New Book</h3>
            <form id="addBookForm" method="POST">
                <input type="text" name="title" placeholder="Title" required>
                <input type="text" name="author" placeholder="Author" required>
                <input type="number" name="publication_year" placeholder="Publication Year" required>
                <input type="text" name="genre" placeholder="Genre" required>
                <input type="hidden" name="id" id="bookId">
                <button type="submit" id="formButton">Add Book</button>
            </form>
        </div>

        <!-- Modal for Edit Book -->
        <div id="editBookModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h3>Edit Book</h3>
                <form id="editBookForm">
                    <input type="text" name="title" id="editTitle" placeholder="Title" required>
                    <input type="text" name="author" id="editAuthor" placeholder="Author" required>
                    <input type="number" name="publication_year" id="editPublicationYear" placeholder="Publication Year" required>
                    <input type="text" name="genre" id="editGenre" placeholder="Genre" required>
                    <input type="hidden" name="id" id="editBookId">
                    <button type="submit">Update Book</button>
                </form>
            </div>
        </div>

        <!-- Book List -->
        <div class="book-list">
            <h2>Book List</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Publication Year</th>
                        <th>Genre</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="bookList"></tbody>
            </table>
        </div>
    </div>

    <!-- Landscape Contact Page Image -->
    <img src="contact_img.png" alt="Contact Image" class="contact-image">

    <script src="test.js"></script>
</body>
</html>
