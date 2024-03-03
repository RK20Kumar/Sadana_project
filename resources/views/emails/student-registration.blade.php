

<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Confirmation</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f2f2f2; padding: 20px;">

    <table cellpadding="0" cellspacing="0" border="0" width="100%" style="max-width: 600px; margin: 0 auto; background-color: #ffffff; border-radius: 10px; box-shadow: 0px 3px 10px rgba(0,0,0,0.1);">
        <tr>
            <td style="padding: 20px; background-color: #468fc3; color: #ffffff; border-radius: 10px 10px 0 0;">
                <h1 style="font-size: 28px; margin-bottom: 20px;">Welcome, {{ $student->first_name }}!</h1>
            </td>
        </tr>
        <tr>
            <td style="padding: 20px;">
                <p style="font-size: 16px; color: #333333;">You have successfully registered as a student.</p>
                <p style="font-size: 16px; color: #333333;">Your login credentials are:</p>

                <table cellpadding="0" cellspacing="0" border="0" width="100%" style="background-color: #f2f2f2; border: 1px solid #dddddd; border-radius: 5px; margin-top: 10px;">
                    <tr>
                        <td style="padding: 10px; font-size: 16px; color: #333333; font-weight: bold;">Student ID:</td>
                        <td style="padding: 10px; font-size: 16px; color: #333333;">{{ $student->student_id }}</td>
                    </tr>
                    
                </table>

                <table cellpadding="0" cellspacing="0" border="0" width="100%" style="background-color: #f2f2f2; border: 1px solid #dddddd; border-radius: 5px; margin-top: 10px;">
                    
                    <tr>
                        <td style="padding: 10px; font-size: 16px; color: #333333; font-weight: bold;">Email:</td>
                        <td style="padding: 10px; font-size: 16px; color: #333333;">{{ $student->email }}</td>
                    </tr>
                    <tr>
                        <td style="padding: 10px; font-size: 16px; color: #333333; font-weight: bold;">Password:</td>
                        <td style="padding: 10px; font-size: 16px; color: #333333;">{{ $student->password }}</td>
                    </tr>
                </table>
                <p style="font-size: 16px; color: #333333;">Thank you for joining us!</p>
                <p style="font-size: 16px; color: #333333;">If you have any questions or need assistance, feel free to contact us.</p>
                <p style="font-size: 16px; color: #333333;">Best regards,<br>Sadhana Institute</p>
            </td>
        </tr>
        <tr>
            <td style="padding: 20px; background-color: #468fc3; color: #ffffff; border-radius: 0 0 10px 10px;">
                <p style="font-size: 14px; color: #ffffff;">This is an automated email. Please do not reply to this message.</p>
            </td>
        </tr>
    </table>

</body>
</html>



{{--  @component('mail::message')
# Welcome to Sadana Institute, Hi {{ $student->student_name }}!

Your LMS Username : {{ $student->student_id }}
Your LMS password : {{ $student->password }}
Please keep this information safe and secure.

Thanks,
Your Sadhana Institute

@endcomponent  --}}

