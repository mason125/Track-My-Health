package myhealth.october.com.trackmyhealth;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.*;

public class Main_Menu extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main__menu);

        controls();
    }

    public void controls()
    {
        //controls group
        ImageButton bp = findViewById(R.id.blood_pressure);
        ImageButton bs = findViewById(R.id.blood_sugar);
        ImageButton wt = findViewById(R.id.weight);
        final ImageButton meds = findViewById(R.id.meds);


        bp.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

                startActivity(new Intent(Main_Menu.this, blood_pressure.class));
            }
        });

        bs.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

                startActivity(new Intent(Main_Menu.this, blood_sugar.class));
            }
        });

        wt.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                startActivity(new Intent(Main_Menu.this, weight.class));
            }
        });

        meds.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View v)
            {
                startActivity(new Intent(Main_Menu.this, meds.class));
            }
        });
    }
}
