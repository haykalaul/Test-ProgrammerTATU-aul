namespace App\Enums;
enum LogStatus: string {
    case Pending = 'pending';
    case Approved = 'approved';
    case Rejected = 'rejected';
}