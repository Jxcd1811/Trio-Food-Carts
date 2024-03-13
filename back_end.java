import java.util.ArrayList;
import java.util.Date;
import java.util.List;

class Reservation {
    private String name;
    private String email;
    private Date date;
    private int partySize;
    private String packageType;

    public Reservation(String name, String email, Date date, int partySize, String packageType) {
        this.name = name;
        this.email = email;
        this.date = date;
        this.partySize = partySize;
        this.packageType = packageType;
    }

    // Getters and Setters
    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public Date getDate() {
        return date;
    }

    public void setDate(Date date) {
        this.date = date;
    }

    public int getPartySize() {
        return partySize;
    }

    public void setPartySize(int partySize) {
        this.partySize = partySize;
    }

    public String getPackageType() {
        return packageType;
    }

    public void setPackageType(String packageType) {
        this.packageType = packageType;
    }

    @Override
    public String toString() {
        return "Reservation{" +
                "name='" + name + '\'' +
                ", email='" + email + '\'' +
                ", date=" + date +
                ", partySize=" + partySize +
                ", packageType='" + packageType + '\'' +
                '}';
    }
}

public class ReservationSystem {
    private List<Reservation> reservations;

    public ReservationSystem() {
        reservations = new ArrayList<>();
    }

    public void addReservation(String name, String email, Date date, int partySize, String packageType) {
        Reservation reservation = new Reservation(name, email, date, partySize, packageType);
        reservations.add(reservation);
    }

    public List<Reservation> getReservations() {
        return reservations;
    }

    public static void main(String[] args) {
        ReservationSystem reservationSystem = new ReservationSystem();
        reservationSystem.addReservation("John Doe", "john@example.com", new Date(), 5, "Standard");
        reservationSystem.addReservation("Jane Smith", "jane@example.com", new Date(), 3, "Premium");

        List<Reservation> allReservations = reservationSystem.getReservations();
        for (Reservation reservation : allReservations) {
            System.out.println(reservation);
        }
    }
}