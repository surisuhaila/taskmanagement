<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Articles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/articles.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container my-4">
    <h1><b>Articles</b></h1>

   
    <table class="table table-dark table-striped" id="articleTable">
        <thead>
            <tr>
                <th>No.</th>
                <th>Article Title</th>
                <th>Category</th>
                <th>Date Published</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody id="articleTableBody">
         
        </tbody>
    </table>

  
    <form id="articleForm">
        <div class="mb-3">
            <label for="InputTitle" class="form-label">Article Title</label>
            <input type="text" class="form-control" id="InputTitle" required>
        </div>

        <div class="mb-3">
            <label for="InputCategory" class="form-label">Category</label>
            <input type="text" class="form-control" id="InputCategory" required>
        </div>

        <div class="mb-3">
            <label for="InputDate" class="form-label">Date Published</label>
            <input type="date" class="form-control" id="InputDate" required>
        </div>

        <div class="mb-3">
            <label for="InputDescription" class="form-label">Description</label>
            <input type="text" class="form-control" id="InputDescription" required>
        </div>

        <button type="submit" class="btn btn-success">Add Article</button>
    </form>
</div>

<script>
    
    function loadArticles() {
        const articles = JSON.parse(localStorage.getItem("articles")) || [];
        const tbody = document.getElementById("articleTableBody");
        tbody.innerHTML = "";

        articles.forEach((article, index) => {
            const row = document.createElement("tr");
            row.innerHTML = `
                <td>${index + 1}</td>
                <td>${article.title}</td>
                <td>${article.category}</td>
                <td>${article.date}</td>
                <td>${article.description} min</td>
            `;
            tbody.appendChild(row);
        });
    }

    
    const articleForm = document.getElementById("articleForm");
    articleForm.addEventListener("submit", function(e) {
        e.preventDefault();

        const title = document.getElementById("InputTitle").value;
        const category = document.getElementById("InputCategory").value;
        const date = document.getElementById("InputDate").value;
        const description = document.getElementById("InputDescription").value;

        let articles = JSON.parse(localStorage.getItem("articles")) || [];
        articles.push({ title, category, date, description });
        localStorage.setItem("articles", JSON.stringify(articles));

        loadArticles();
        articleForm.reset();
    });

  
    loadArticles();
</script>

</body>
</html>
  