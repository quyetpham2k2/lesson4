# lesson 4

- Lớp trừu tượng và Interface khi kế thừa hoặc triển khai thì "bắt buộc" phải khai báo lại tất cả các phương thức trừu tưởng của các lớp trừu tượng hoặc interface, nếu không dùng thì vẫn phải khai báo rồi để đó cho có cũng được hoặc ném ngoại lệ để thông báo là phương thức đó không dùng đến chẳng hạn.

- Tính trừu tượng thông qua abstract class:

  - Một lớp trừu tượng không thể được khởi tạo trực tiếp, chỉ có thể làm lớp cha để các lớp con kế thừa và triển khai các phương thức trừu tượng.
  - Ví dụ: Định nghĩa phương thức calculateBonus() trong lớp trừu tượng để các lớp con (như Manager, Developer) triển khai cách tính thưởng khác nhau.

- Tính đa hình thông qua interface:

  - PHP cho phép một lớp triển khai nhiều interface, từ đó cung cấp khả năng hỗ trợ nhiều hành vi khác nhau.
  - Ví dụ: Một lớp có thể vừa triển khai Workable để định nghĩa công việc, vừa triển khai Payable để định nghĩa cách thanh toán.

- Overriding (Ghi đè phương thức):

  - Các lớp con có thể ghi đè phương thức của lớp cha để thực hiện hành vi riêng biệt.
  - Ví dụ: Phương thức work() được ghi đè trong mỗi lớp (Manager, Developer) để mô tả công việc cụ thể.

- Sử dụng từ khóa instanceof để kiểm tra kiểu:

  - Tính đa hình được thể hiện khi các đối tượng thuộc cùng kiểu cha (abstract class hoặc interface) nhưng có thể thực hiện hành vi khác nhau tùy theo lớp con cụ thể.
  - Ví dụ: Kiểm tra một đối tượng có triển khai interface Colorable không để gọi phương thức howToColor().

- Khả năng mở rộng và tái sử dụng:

  - Lớp trừu tượng và interface cho phép xây dựng hệ thống linh hoạt, dễ dàng mở rộng bằng cách thêm lớp mới mà không làm ảnh hưởng đến các lớp hiện có.
  - Ví dụ: Khi thêm một loại nhân viên mới như Tester, chỉ cần kế thừa Employee và triển khai Workable.

- Hỗ trợ đa hình thông qua các phương thức chung:
  - Một phương thức có thể nhận đối số là kiểu abstract class hoặc interface để xử lý linh hoạt các đối tượng khác nhau.
  - Ví dụ: Phương thức xử lý danh sách Employee có thể hoạt động với bất kỳ đối tượng nào kế thừa từ lớp Employee.
