<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript" src="jquery.js"></script>

    <script>
    $(document).ready(function() {
        
        $('table').each(function() {
            var totalmarks = 0;

            $(this).find('.quiz-1,.quiz-2,.quiz-3').each(function() {
                var marks = $(this).val();
                if (marks.length !== 0) {
                    totalmarks += parseFloat(marks);

                }
            });

            $(this).find('.total').html(totalmarks);
            $(this).find('.quizAvg').html((totalmarks/3));


        });

    });
    </script>

</head>

<body>
    <table border="1">
        <thead>
            <tr>
                <th>Name</th>
               
                <th>math</th>
                <th>Eng</th>
                <th>Bangla</th>
                <th>Phy</th>
                
                <th>Sum</th>
                <th>Avg</th>
                <th>Best-2</th>
            </tr>
        </thead>
        <tbody>
            <tr>

                <td>Mahmud</td>
                <td class="subject"><input class="quiz-1" type="number" name="" value="50"></td>
                <td class="subject"><input class="quiz-2" type="number" name="" value="20"></td>
                <td class="subject"><input class="quiz-3" type="number" name="" value="70"></td>
                <td class="subject"><input class="attd" type="number" name="" value="70"></td>

                <td class="total"></td>
                <td class="quizAvg"></td>
                <td class="Best-2"></td>

            </tr>

             <tr>

                <td>Mahmud</td>
                <td class="subject"><input class="quiz-1" type="number" name="" value="10"></td>
                <td class="subject"><input class="quiz-2" type="number" name="" value="60"></td>
                <td class="subject"><input class="quiz-3" type="number" name="" value="30"></td>
                <td class="total"></td>
                <td class="quizAvg"></td>
                <td class="Best-2"></td>
            </tr>

         <tr>

                 <td>Mahmud</td>
                <td class="subject"><input class="quiz-1" type="number" name="" value="90"></td>
                <td class="subject"><input class="quiz-2" type="number" name="" value="30"></td>
                <td class="subject"><input class="quiz-3" type="number" name="" value="40"></td>
                <td class="total"></td>
                <td class="quizAvg"></td>
                <td class="Best-2"></td>

            </tr>

        </tbody>
    </table>
</body>

</html>