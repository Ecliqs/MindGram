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
                                    <h2>Below are the score of your Forgiveness Assessment</h2>
                                </div>
                                <div class="col-lge" style="display:inline-block;width:100%;max-width:395px;vertical-align:top;padding-bottom:20px;font-family:Arial,sans-serif;font-size:16px;line-height:22px;color:#363636;">
                                    <p><b>Total HFS: </b>{{ $mailData['hfs'] }}</p>
                                    <p><b>HFS Forgivenesss of Self: </b>{{ $mailData['shfs'] }}</p>
                                    <p><b>HFS Forgiveness of Others: </b>{{ $mailData['ohfs'] }}</p>
                                    <p><b>HFS Forgiveness of Situations: </b>{{ $mailData['chfs'] }}</p>
                                </div>
                                <div class="col-lge" style="display:inline-block;width:100%;max-width:395px;vertical-align:top;padding-bottom:20px;font-family:Arial,sans-serif;font-size:16px;line-height:22px;color:#363636;">
                                    <p>HFS Scoring Instructions Four scores are calculated for the Heartland Forgiveness Scale (HFS): Total HFS (items 1-18), HFS Forgiveness of Self subscale (items 1-6), HFS Forgiveness of Others subscale (items 7-12), HFS Forgiveness of Situations subscale (items 13-18).</p>
                                    <p>Scores for items 1, 3, 5, 8, 10, 12, 14, 16, & 18 are the same as the answer written by the person taking the HFS. Scores for items 2, 4, 6, 7, 9, 11, 13, 15, and 17 are reversed.</p>
                                    <p>For example, an answer of 1 is given a score of 7 and an answer of 7 is given a score of 1.</p>
                                    <p>The HFS consists of items that reflect a persons tendency to forgive him or herself, other people, and situations that are beyond anyones control (e.g., a natural disaster). Scores for the Total HFS can range from 18 to 126. Scores for the three HFS subscales can range from 6 to 42.</p>
                                </div>
                                <div class="col-lge" style="display:inline-block;width:100%;max-width:395px;vertical-align:top;padding-bottom:20px;font-family:Arial,sans-serif;font-size:16px;line-height:22px;color:#363636;">
                                    <h2>Total HFS</h2>
                                    <p>Ones score on the Total HFS indicates how forgiving a person tends to be of oneself, other people, and uncontrollable situations. Higher scores indicate higher levels of forgiveness, and lower scores indicate lower levels of forgiveness.</p>
                                    <ul>
                                        <li>A score of 18 to 54 on the Total HFS indicates that one is usually unforgiving of oneself, others, and uncontrollable situations.</li>
                                        <li>A score of 55 to 89 on the Total HFS indicates that one is about as likely to forgive, as one is not to forgive oneself, others, and uncontrollable situations.</li>
                                        <li>A score of 90 to 126 on the Total HFS indicates that one is usually forgiving of oneself, others, and uncontrollable situations.</li>
                                    </ul>
                                </div>
                                <div class="col-lge" style="display:inline-block;width:100%;max-width:395px;vertical-align:top;padding-bottom:20px;font-family:Arial,sans-serif;font-size:16px;line-height:22px;color:#363636;">
                                    <h2>HFS Subscales</h2>
                                    <p>Ones score on the three HFS subscales indicate how forgiving a person tends to be of oneself (HFS Forgiveness of Self), other people (HFS Forgiveness of Others), or situations beyond anyones control (HFS Forgiveness of Situations). Higher scores indicate higher levels of forgiveness, and lower scores indicating lower levels of forgiveness.</p>
                                    <ul>
                                        <li>A score of 6 to 18 on HFS Forgiveness of Self, HFS Forgiveness of Others, or HFS Forgiveness of Situations indicates that one is usually unforgiving of oneself, other people, or uncontrollable situations, respectively.</li>
                                        <li>A score of 19 to 29 indicates that one is about as likely to forgive as to not forgive oneself, other people, or uncontrollable situations, respectively.</li>
                                        <li>Score of 30 to 42 indicates that one is usually forgiving of oneself, other people, or uncontrollable situations, respectively.</li>
                                    </ul>
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