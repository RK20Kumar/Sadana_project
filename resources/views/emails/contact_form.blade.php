<!DOCTYPE html>
<html>
<head>
    <title>Contact Form Submission</title>
    <style>
        /* Apply your custom email styling here */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
        }

        /* Email Container */
        table {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 3px 10px rgba(0,0,0,0.1);
        }

        /* Header */
        .header {
            padding: 20px;
            background-color: #468fc3;
            color: #ffffff;
            border-radius: 10px 10px 0 0;
        }

        /* Content */
        .content {
            padding: 20px;
        }

        /* Details Table */
        table.details {
            background-color: #f2f2f2;
            border: 1px solid #dddddd;
            border-radius: 5px;
            margin-top: 10px;
        }

        table.details td {
            padding: 10px;
            font-size: 16px;
            color: #333333;
        }

        /* Footer */
        .footer {
            padding: 20px;
            background-color: #468fc3;
            color: #ffffff;
            border-radius: 0 0 10px 10px;
        }

        .footer p {
            font-size: 14px;
            color: #ffffff;
        }

        .center {
    text-align: center;
  }
    </style>
</head>
<body>
    <table cellpadding="0" cellspacing="0" border="0" width="100%">
        <tr>
              <td class="header">
                <div class="center">
                    <h1 style="font-size: 28px; margin-bottom: 20px;">Contact Form Submission</h1>
                  </div>
            </td>
        </tr>
        <tr>
            <td class="content">
                <p style="font-size: 16px; color: #333333;"><strong>Name[Sender's Name]:</strong> {{ $data['name'] }}</p>
                <p style="font-size: 16px; color: #333333;"><strong>Email[Sender's Email]:</strong> {{ $data['email'] }}</p>
                <p style="font-size: 16px; color: #333333;"><strong>Subject:</strong> {{ $data['subject'] }}</p>
                <p style="font-size: 16px; color: #333333;"><strong>Message[Sender's Message]:</strong></p>
                <p style="font-size: 16px; color: #333333;">{{ $data['message'] }}</p>
            </td>
        </tr>
        <!-- ... Additional content ... -->
    </table>
</body>
</html>
