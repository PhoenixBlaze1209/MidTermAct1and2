<?php



$username = readline("Enter your username: ");
$role = strtolower(readline("Enter your role (administrator/moderator/member/guest): "));      
$isActive = true;
$isPremium = true;
$lastLoginDaysAgo = 0;   


echo ($role === "administrator") 
    ? "👑 Welcome back, Administrator!\n" 
    : "Welcome, {$username}!\n";


echo ($lastLoginDaysAgo <= 1) 
    ? "You logged in recently.\n\n" 
    : "It’s been {$lastLoginDaysAgo} days since your last login.\n\n";



if (!$isActive)
{
    echo "⚠️ Your account is inactive. Please contact support.\n";
} elseif ($role === "administrator"){
    echo "✅ Full access to all system features.\n";
} elseif ($role === "moderator") {
    echo "✅ Access to Forum Management and User Tools.\n";
    if ($isPremium) 
    {
        echo "⭐ Premium moderation dashboard unlocked!\n";
    }
} elseif ($role === "member") {
    echo "✅ Access to Forum Posts and Profile Editor.\n";
    if ($isPremium)
    {
        echo "⭐ Premium content library unlocked!\n";
    }
} else {
    echo "👤 Limited guest access. Please sign up for more features.\n";
}

echo "\n";



$notificationPreference = strtolower(readline("Enter your prefer notification (email/sms/both/none): "));


switch ($notificationPreference) {
    case "email":
        echo "✉️ Email notifications are enabled.\n";
        break;
    case "sms":
        echo "📱 SMS notifications are enabled.\n";
        break;
    case "both":
        echo "🔔 Email and SMS notifications are enabled.\n";
        break;
    case "none":
        echo "🔕 You have disabled all notifications.\n";
        break;
    default:
        echo "Notification preference not recognized.\n";
        return $notificationPreference;
}
