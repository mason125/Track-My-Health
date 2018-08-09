package myhealth.october.com.trackmyhealth;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.ImageButton;

public class blood_pressure extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_blood_pressure);

        controls();
    }

    public void controls()
    {
        ImageButton enter = findViewById(R.id.enter_bp);
        ImageButton stats = findViewById(R.id.stats_bp);

        //enter data into blood pressure
        enter.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                startActivity(new Intent(blood_pressure.this, write_blood_pressure.class));
            }
        });

        //read data from blood pressure
        stats.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                startActivity(new Intent(blood_pressure.this, read_blood_pressure.class));
            }
        });
    }
}
