<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="x-apple-disable-message-reformatting">
        <title>Welcome to Mindsutra</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
            table, td, div, h1, p {
                font-family: Arial, sans-serif;
            }
            @media screen and (max-width: 530px) {
                .unsub {
                    display: block;
                    padding: 8px;
                    margin-top: 14px;
                    border-radius: 6px;
                    background-color: #555555;
                    text-decoration: none !important;
                    font-weight: bold;
                }
                .col-lge {
                    max-width: 100% !important;
                }
            }
            @media screen and (min-width: 531px) {
                .col-sml {
                    max-width: 27% !important;
                }
                .col-lge {
                    max-width: 73% !important;
                }
            }
        </style>
    </head>
    <body style="margin:0;padding:0;word-spacing:normal;background-color:#939297;">
        <div role="article" aria-roledescription="email" lang="en" style="text-size-adjust:100%;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;background-color:#939297;">
            <p>Hi {{ $mailData['name'] }},</p>
            <br/><br/>
            <table role="presentation" style="width:100%;border:none;border-spacing:0;">
                <tr>
                    <td align="center" style="padding:0;">
                        <table role="presentation" style="width:94%;max-width:600px;border:none;border-spacing:0;text-align:left;font-family:Arial,sans-serif;font-size:16px;line-height:22px;color:#363636;">
                        <tr>
                            <td style="padding:40px 30px 30px 30px;text-align:center;font-size:24px;font-weight:bold;">
                                <a href="https://themindsutra.com/" style="text-decoration:none;" target="_blank" rel="noopener noreferrer">
                                    <img src="https://themindsutra.com/images/logo.png" width="165" alt="Logo" style="width:165px;max-width:80%;height:auto;border:none;text-decoration:none;color:#ffffff;">
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding:30px;background-color:#ffffff;">
                                <h1 style="margin-top:0;margin-bottom:16px;font-size:26px;line-height:32px;font-weight:bold;letter-spacing:-0.02em;">Welcome to Mindsutra!</h1>
                                <p style="margin:0;"></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding:35px 30px 11px 30px;font-size:0;background-color:#ffffff;border-bottom:1px solid #f0f0f5;border-color:rgba(201,201,207,.35);">
                                <div class="col-lge" style="display:inline-block;width:100%;max-width:395px;vertical-align:top;padding-bottom:20px;font-family:Arial,sans-serif;font-size:16px;line-height:22px;color:#363636;">
                                    <h2>Below are the score of your Authenticity Assessment</h2>
                                </div>
                                <div class="col-lge" style="display:inline-block;width:100%;max-width:395px;vertical-align:top;padding-bottom:20px;font-family:Arial,sans-serif;font-size:16px;line-height:22px;color:#363636;">
                                    <p><b>Self-Awareness: </b>{{ $mailData['sa'] }}</p>
                                    <p><b>Internalized Moral Perspective: </b>{{ $mailData['imp'] }}</p>
                                    <p><b>Balanced Processing: </b>{{ $mailData['bp'] }}</p>
                                    <p><b>Relational Transparency: </b>{{ $mailData['rt'] }}</p>
                                </div>
                                <div class="col-lge" style="display:inline-block;width:100%;max-width:395px;vertical-align:top;padding-bottom:20px;font-family:Arial,sans-serif;font-size:16px;line-height:22px;color:#363636;">
                                    <p>This self-assessment questionnaire is designed to measure your authentic leadership by assessing four components of the process: self-awareness, internalized moral perspective, balanced processing, and relational transparency. By comparing your scores on each of these components, you can determine which are your stronger and which are your weaker components in each category. You can interpret your authentic leadership scores using the following guideline: high = 16–20 and low = 15 and below. Scores in the upper range indicate stronger authentic leadership, whereas scores in the lower range indicate weaker authentic leadership.</p>
                                </div>
                                <div class="col-lge" style="display:inline-block;width:100%;max-width:395px;vertical-align:top;padding-bottom:20px;font-family:Arial,sans-serif;font-size:16px;line-height:22px;color:#363636;">
                                    <p style="margin:0;">
                                        <a href="https://themindsutra.com/contact-us" target="_blank" rel="noopener noreferrer" style="background: #ff3884; text-decoration: none; padding: 10px 25px; color: #ffffff; border-radius: 4px; display:inline-block; mso-padding-alt:0;text-underline-color:#ff3884">Get in Touch</a>
                                    </p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding:30px;text-align:center;font-size:12px;background-color:#404040;color:#cccccc;">
                                <p style="margin:0 0 8px 0;">
                                    <a href="https://www.facebook.com/The-Mind-Sutra-106715745380192" style="text-decoration:none;" target="_blank" rel="noopener noreferrer" title="Facebook"><i class="fa-brands fa-facebook"></i></a>
                                </p>
                                <p style="margin:0 0 8px 0;">
                                    <a href="https://www.instagram.com/the.mindsutra/" style="text-decoration:none;" target="_blank" rel="noopener noreferrer" title="Instagram"><i class="fa-brands fa-instagram"></i></a>
                                </p>
                                <p style="margin:0 0 8px 0;">
                                    <a href="https://www.linkedin.com/in/dr-meghna-varma-66647623a/" style="text-decoration:none;" target="_blank" rel="noopener noreferrer" title="Linkedin"><i class="fa-brands fa-linkedin"></i></a>
                                </p>
                                <p style="margin:0 0 8px 0;">
                                    <a href="https://twitter.com/themindsutra10" style="text-decoration:none;" target="_blank" rel="noopener noreferrer" title="Twitter"><i class="fa-brands fa-twitter"></i></a>
                                </p>
                                <p style="margin:0 0 8px 0;">
                                    <a href="#" style="text-decoration:none;" target="_blank" rel="noopener noreferrer" title="Youtube"><i class="fa-brands fa-youtube"></i></a>
                                </p>
                                <p style="margin:0;font-size:14px;line-height:20px;color:white;">&reg; 2022, themindsutra.com</p>
                            </td>
                        </tr>
                    </td>
                </tr>
            </table>
        </div>
    </body>
</html>