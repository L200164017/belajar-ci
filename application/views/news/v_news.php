<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Berita</title>
</head>
<body>
   <table border="1px solid black">
    <tr>
        <th>Nama Berita</th>
        <th>Slug</th>
        <th>Isi Berita</th>
    </tr>
    

    <?php foreach ($news as $news) : ?>
        <tr>
            <td><?php echo $news['title']; ?></td>
            <td><?php echo $news['slug']; ?></td>
            <td><?php echo $news['text']; ?></td>
        </tr>
    
    
    <?php endforeach ?>
   
   
   </table>

</body>
</html>